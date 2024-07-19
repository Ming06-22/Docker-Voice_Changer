from pydub import AudioSegment

audio = AudioSegment.from_file("/share/input.wav")

lower_pitch_audio = audio._spawn(audio.raw_data,
    overrides={
        "frame_rate": int(audio.frame_rate / 1.5)
    }
)

male_voice_audio = lower_pitch_audio.set_frame_rate(audio.frame_rate)
# male_voice_audio = male_voice_audio.speedup(playback_speed=1.5)

male_voice_audio.export("/share/result.wav", format = "wav")
